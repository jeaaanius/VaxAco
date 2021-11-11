from flask_wtf import FlaskForm
from wtforms import StringField, PasswordField, SubmitField
from wtforms.validators import EqualTo, Email, DataRequired, ValidationError

from vaxaco.models import users


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


# class BookForm(FlaskForm):
#     name = StringField(validators=[DataRequired()])
#     email = StringField(validators=[Email(), DataRequired()])
#     # phone = (validators=)
#     submit = SubmitField(label='BOOK TABLE')

    # date = db.Column(db.Date(), nullable=False)
    # name = db.Column(db.String(length=255), nullable=False)
    # timeslot = db.Column(db.String(length=255), nullable=False)
    # email = db.Column(db.String(length=255), nullable=False)
    # guest = db.Column(db.Integer(), nullable=False)
    # contact = db.Column(db.String(length=255), nullable=False)
    # account = db.Column(db.String(length=255), nullable=False)
