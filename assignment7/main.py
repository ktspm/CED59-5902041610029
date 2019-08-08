from flask import Flask, render_template
from flask_wtf import FlaskForm
from wtforms import SelectField
from wtforms.validators import DataRequired

app = Flask(__name__)


@app.route("/")
def member():
    return render_template('add.html')

@app.route("/", methods=["post"])
def register():
    return 'Register Ok';

if __name__ == "__main__":
    app.run(debug=True)
