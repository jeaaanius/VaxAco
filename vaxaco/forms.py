from flask_wtf import FlaskForm
from wtforms import StringField, PasswordField, SubmitField
from wtforms.validators import EqualTo, Email, DataRequired, ValidationError

from vaxaco.models import users, bookings


class RegisterForm(FlaskForm):
    def validate_username(self, username_to_check):
        user = users.query.filter_by(username=username_to_check.data).first()
        if user:
            raise ValidationError('Username already exists')

    def validate_email(self, email_address_to_check):
        email_address = users.query.filter_by(email=email_address_to_check.data).first()
        if email_address:
            raise ValidationError('Email already exists')

    username = StringField(label='username', validators=[DataRequired()])
    email_address = StringField(label='email', validators=[Email(), DataRequired()])
    password1 = PasswordField(label='password', validators=[DataRequired()])
    password2 = PasswordField(label='confirm password', validators=[EqualTo('password1'), DataRequired()])
    submit = SubmitField(label='REGISTER')


class LoginForm(FlaskForm):
    username = StringField(label='username', validators=[DataRequired()])
    password = PasswordField(label='password', validators=[DataRequired()])
    submit = SubmitField(label='LOG IN')


class BookForm(FlaskForm):
    def validate_booking(self, date_to_check, timeslot_to_check):
        booking_date = bookings.query.filter_by(date=date_to_check.data).first()
        booking_time = bookings.query.filter_by(timeslot=timeslot_to_check.data).first()
        if booking_date and booking_time:
            raise ValidationError('Reservation already exists')

    date = StringField(render_kw={'type': 'date', 'min': "2021-11-12", 'max': "2021-12-12"}, validators=[DataRequired()])
    name = StringField(render_kw={'readonly': True}, validators=[DataRequired()])
    timeslot = StringField(render_kw={'type': "time", 'min': '08:00', 'max': '17:00', 'step': '600'}, validators=[DataRequired()])
    email = StringField(render_kw={'readonly': True}, validators=[Email(), DataRequired()])
    contact = StringField(render_kw={'pattern': "[0-9]{4}[0-9]{3}[0-9]{4}"}, validators=[DataRequired()])
    age = StringField(render_kw={'type': 'number','min': "18", 'max': '100'}, validators=[DataRequired()])
    submit = SubmitField(label='BOOK NOW')
















