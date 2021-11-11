from vaxaco import db, bcrypt
from vaxaco import login_manager
from flask_login import UserMixin


@login_manager.user_loader
def load_user(user_id):
    return users.query.get(int(user_id))


class users(db.Model, UserMixin):
	id = db.Column(db.Integer(), primary_key=True)
	username = db.Column(db.String(length=255), nullable=False, unique=True)
	email = db.Column(db.String(length=255), nullable=False, unique=True)
	password_hash = db.Column(db.String(length=255), nullable=False)
	booking = db.relationship('bookings', backref='user_bookings', lazy=True)

	@property
	def password(self):
		return self.password

	@password.setter
	def password(self, plain_text_password):
		self.password_hash = bcrypt.generate_password_hash(plain_text_password).decode('utf-8')

	def check_password_correction(self, attempted_password):
		return bcrypt.check_password_hash(self.password_hash, attempted_password)



class bookings(db.Model):
	id = db.Column(db.Integer(), primary_key=True)
	date = db.Column(db.Date(), nullable=False)
	name = db.Column(db.String(length=255), nullable=False)
	timeslot = db.Column(db.String(length=255), nullable=False)
	email = db.Column(db.String(length=255), nullable=False)
	guest = db.Column(db.Integer(), nullable=False)
	contact = db.Column(db.String(length=255), nullable=False)
	account = db.Column(db.String(length=255), nullable=False)
	owner = db.Column(db.Integer(), db.ForeignKey('users.id'))

	def __repr__(self):
		return f'bookings {self.name}'