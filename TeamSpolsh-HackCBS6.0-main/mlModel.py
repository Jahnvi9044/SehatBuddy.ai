
import numpy as np
import pandas as pd 
from sklearn.model_selection import train_test_split
from sklearn.ensemble import RandomForestClassifier
from sklearn.metrics import accuracy_score
import pickle

RANDOM_STATE = 55
import os
for dirname, _, filenames in os.walk('/kaggle/input'):
    for filename in filenames:
        print(os.path.join(dirname, filename))



def normalize(x):
    mu = np.mean(x)
    std = np.std(x)
    x = (x - mu) / std

    return x


path = "heart.csv"
df = pd.read_csv(path)


df=df.drop("Cholesterol",axis=1)



df=df.drop("ChestPainType",axis=1)



columns = [
    "Sex",
    "RestingECG",
     "ExerciseAngina",
    "ST_Slope"
]
df = pd.get_dummies(df, prefix = columns  , columns = columns , dtype = float)

target = df["HeartDisease"]
features = df.drop("HeartDisease", axis = 1)


X_train , X_val, y_train, y_val = train_test_split(features, target, train_size = 0.8)

X_train_norm = normalize(np.array(X_train))
X_val_norm = normalize(np.array(X_val))


min_samples_split_list = [2,10, 30, 50, 100, 200, 300, 700] 
max_depth_list = [1,2, 3, 4, 8, 16, 32, 64, None] 

#Now lets try Randomforest
n_estimators_list = [10,50,100,500]




"""max_depht = 4
min_samples_split = 10
n_estimators = 100"""


#lets fit randomforest with above parameters
random_forest_model = RandomForestClassifier(max_depth = 16,
                                            min_samples_split = 10,
                                            n_estimators = 100).fit(X_train_norm, y_train)


print(random_forest_model)

pickle.dump(random_forest_model,open('model.pkl','wb'))

