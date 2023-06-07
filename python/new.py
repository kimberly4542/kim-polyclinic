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
import statsmodels.api as sm

from sklearn.metrics import mean_squared_error,r2_score,mean_absolute_error
from sklearn.metrics import median_absolute_error,mean_squared_log_error
from statsmodels.tsa.statespace.sarimax import SARIMAX
from statsmodels.tsa.stattools import adfuller
from statsmodels.graphics.tsaplots import plot_acf,plot_pacf
from statsmodels.tsa.seasonal import seasonal_decompose
from pmdarima import auto_arima
import matplotlib
from matplotlib import pyplot as plt

plt.style.use('ggplot')

import warnings
# get_ipython().run_line_magic('matplotlib', 'inline')
warnings.filterwarnings('ignore')

df =pd.read_csv('newforecast.csv')
df['created_at'].index = pd.DatetimeIndex(df['created_at'])

plt.figure(figsize=[12,5])
df.plot(x='created_at',y='total',figsize=(14,6),legend = True,color ='g')
plt.title('sickness')
plt.ylabel('total')
plt.xlabel('year')
plt.xticks(rotation=90)
plt.grid(True)

best_model = SARIMAX(df['total'],order=(2,1,1),seasonal_order=(2,1,1,7)).fit(dis=-1)
print(best_model.summary())
best_model.plot_diagnostics(figsize=(15,12))
plt.savefig('G:\laragon\www\kim-polyclinic\public\image\modell.jpg')


forecast_values = best_model.get_forecast(steps=24)
forecast_ci = forecast_values.conf_int()

ax =df.plot(x='created_at',y='total',figsize=(14,6),legend=True,color='purple')

forecast_values.predicted_mean.plot(ax.ax,label = 'FOrecast',figsize=(14,6),grid=True)
ax.fill_between(forecast_ci.index,forecast_ci.iloc[: , 0],forecast_ci.iloc[: ,1],color='yelow',alpha=.5)
plt.title('mga sakit monthly',size = 16)
plt.ylabel('cases')
plt.legend(loc='upper left',prop={'size':12})
ax.axes.get_xaxis().set_visible(True)

plt.savefig('G:\laragon\www\kim-polyclinic\public\image\forecast.png')

train = df[:int(0.85*(len(df)))]
test = df[int(0.85*(len(df))):]

start =len(train)
end=len(train)+len(test)-1

predictions = best_model.predict(start=start,end=end,dynamic=False,typ='levels').rename('SARIMA Predictions')

evaluation_results =pd.DataFrame({'r2_score':r2_score(test['total'],predictions)},index=[0])

evaluation_results['mean_absolute_error'] = mean_absolute_error(test['total'],predictions)

evaluation_results['mean_squared_error'] = mean_squared_error(test['total'],predictions)
evaluation_results['root_mean_squared_error']=np.sqrt(mean_squared_error(test['total'],predictions))
evaluation_results['mean_absolute_percentage_error']=np.mean(np.abs(predictions-test['total'])/np.abs(test['total']))*100

with open('evaluation_results.txt','w') as file:
    file.write(evaluation_results.to_string())