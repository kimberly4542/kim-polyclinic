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

import sys
import warnings
# get_ipython().run_line_magic('matplotlib', 'inline')
warnings.filterwarnings('ignore')



def forecast(diagnosis):
    datadb = mysql.connector.connect(
        host = "192.168.1.8",
        user = "homestead",
        port = 33060,
        password = "secret",
        database ="clinicology"

    )
    cursor = datadb.cursor()

    queryy = """SELECT created_at,diagnos,count(diag_id)
    AS total FROM diagnosis 
    WHERE diagnos = '{}' 
    GROUP BY diagnos,Date(created_at);""".format(diagnosis)

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
    plt.savefig(f'pic_{diagnosis}.svg')
    return plt.savefig('pic.svg')


if __name__ == '__main__':
    forecast(sys.argv[1])
