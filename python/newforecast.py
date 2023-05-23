#!/usr/bin/env python
# coding: utf-8




import pandas as pd
import numpy as np
import mysql.connector 
import random
import csv
import pandas as pd
# from mysql.connector import connectio
from statsmodels.tsa.statespace.sarimax import SARIMAX
from statsmodels.graphics.tsaplots import plot_acf,plot_pacf
from statsmodels.tsa.seasonal import seasonal_decompose
from pmdarima import auto_arima
from matplotlib import pyplot as plt

import warnings
# get_ipython().run_line_magic('matplotlib', 'inline')
warnings.filterwarnings('ignore')



def forecast(diagnosis):
    datadb = mysql.connector.connect(
        host = "localhost",
        user = "root",
        password = "",
        database ="polyy"

    )
    cursor = datadb.cursor()

    queryy = """SELECT created_at,diagnos,count(diag_id)
    AS total FROM diagnosis 
    WHERE diagnos = '{diagnosis}' 
    GROUP BY diagnos,Date(created_at);"""

    data = pd.read_sql_query(queryy,datadb)
    data.to_csv('newforecast.csv')
    df =pd.read_csv('newforecast.csv',index_col ="created_at",parse_dates = True).asfreq('c')
    df=df.interpolate()
    df.head()



    training = df.iloc[:-31,:]
    test =df.iloc[-31:,:]



    model = auto_arima( y= training.total, m=7)




    predictions = pd.Series(model.predict(n_periods =len(test)))
    predictions.index = test.index
    predictions[:5]



    training['total']['2021-01-01':].plot(figsize= (12,8),legend =True)
    test['total'].plot(legend = True)

    predictions.plot(legend = True)
    return plt.savefig('pic.svg')














