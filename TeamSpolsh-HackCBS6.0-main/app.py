from flask import Flask, render_template, request
import pickle
import numpy as np

model = pickle.load(open('model.pkl', 'rb'))
app = Flask(__name__)


@app.route('/')
def index():
    return render_template('index.html')


@app.route('/predict', methods=['POST'])
def predict_HeartDisease():
    age = int(request.form.get('age'))
    RestingBP = int(request.form.get('RestingBP'))
    FastingBS = int(request.form.get('FastingBS'))
    MaxHR = int(request.form.get('MaxHR'))
    Oldpeak = float(request.form.get('Oldpeak'))
    Sex = request.form.get('Sex')
    RestingECG = request.form.get('RestingECG')
    ExerciseAngina = request.form.get('ExerciseAngina')
    ST_Slope = request.form.get('ST_Slope')

    # ... (rest of the code remains unchanged)

    Sex_F = 0
    Sex_M = 0

    RestingECG_LVH = 0
    RestingECG_Normal = 0
    RestingECG_ST = 0

    ExerciseAngina_N = 0
    ExerciseAngina_Y = 0

    ST_Slope_Down = 0
    ST_Slope_Flat = 0
    ST_Slope_Up = 0

    if Sex == 'F':
        Sex_F = 1
    if Sex == 'M':
        Sex_M = 1
    if RestingECG == 'Normal':
        RestingECG_Normal = 1
    if RestingECG == 'ST':
        RestingECG_ST = 1
    if RestingECG == 'LVH':
        RestingECG_LVH = 1
    if ExerciseAngina == 'N':
        ExerciseAngina_N = 1
    if ExerciseAngina == 'Y':
        ExerciseAngina_Y = 1
    if ST_Slope == 'Down':
        ST_Slope_Down = 1
    if ST_Slope == 'Up':
        ST_Slope_Up = 1
    if ST_Slope == 'Flat':
        ST_Slope_Flat = 1

    result = model.predict(np.array (
        [age, RestingBP, FastingBS, MaxHR, Oldpeak, Sex_F, Sex_M, RestingECG_LVH, RestingECG_Normal, RestingECG_ST,
         ExerciseAngina_N, ExerciseAngina_Y, ST_Slope_Down, ST_Slope_Flat, ST_Slope_Up]).reshape(1, 15))

    if result==1:
        return "Heart Attack!!"
    else :
        return "Chill"


# Age	RestingBP	FastingBS	MaxHR	Oldpeak	Sex_F	Sex_M	RestingECG_LVH	RestingECG_Normal	RestingECG_ST	ExerciseAngina_N	ExerciseAngina_Y	ST_Slope_Down	ST_Slope_Flat	ST_Slope_Up


if __name__ == '__main__':
    app.run(debug=True)




# /halooooooooo#