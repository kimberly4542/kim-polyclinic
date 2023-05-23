#!/usr/bin/env python
# coding: utf-8



import argparse
import pandas as pd
import numpy as np
# import mysql.connector
import random
import csv
import pandas as pd
import MySQLdb
import pickle
import os.path

from statsmodels.tsa.statespace.sarimax import SARIMAX
from statsmodels.graphics.tsaplots import plot_acf,plot_pacf
from statsmodels.tsa.seasonal import seasonal_decompose
from pmdarima import auto_arima

from matplotlib import pyplot as plt

import warnings
# get_ipython().run_line_magic('matplotlib', 'inline')
warnings.filterwarnings('ignore')








# def forecast(diagnosis):
datadb = MySQLdb.connect(
    host = "localhost",
    user = "root",
    password = "",
    database ="polyy"

)

parser = argparse.ArgumentParser()
parser.add_argument('-d','--diagnosis')
args = parser.parse_args()
diagnosis = args.diagnosis

#print(diagnosis)
#return(print(diagnosis))



cursor = datadb.cursor()

queryy = """SELECT created_at,diagnos,count(diag_id)
AS total FROM diagnosis 
WHERE diagnos = '{diagnosis}' 
GROUP BY diagnos,Date(created_at);"""
q = "select created_at,diagnos,count(diag_id) as total from diagnosis where diagnos = '{0}' group by diagnos, DATE(created_at)".format(diagnosis)

data = pd.read_sql_query(q, datadb)
#os.remove('newforecast.csv')
data.to_csv('newforecast.csv')
df =pd.read_csv('newforecast.csv',index_col ="created_at",parse_dates = True).asfreq('c')
df=df.interpolate()
df.head()



training = df.iloc[:-31,:]
test =df.iloc[-365:,:]


if not os.path.isfile('G:\laragon\www\kim-polyclinic\python\dengue') or not os.path.isfile('G:\laragon\www\kim-polyclinic\python\malaria') or not os.path.isfile('G:\laragon\www\kim-polyclinic\python\diabetes'):
    model = auto_arima( y= training.total, m=7)
    pickle.dump(model, open(diagnosis, 'wb'))

loaded_model = pickle.load(open("G:\laragon\www\kim-polyclinic\python\\" + diagnosis, 'rb'))



predictions = pd.Series(loaded_model.predict(n_periods =len(test)))
predictions.index = test.index
predictions[:5]



training['total']['2021-01-01':].plot(figsize= (12,8),legend =True)
test['total'].plot(legend = True)
predictions.plot(legend = True)
#print(diagnosis)
plt.savefig('G:\laragon\www\kim-polyclinic\public\image\pic3.png')
    # return plt.savefig('G:\laragon\www\kim-polyclinic\public\image\pic2.png')








