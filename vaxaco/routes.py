
from vaxaco import app
from flask import render_template, redirect, url_for, flash
from vaxaco.forms import RegisterForm, LoginForm
from vaxaco.models import users
from vaxaco import db
from flask_login import login_user, logout_user, login_required

@app.route("/")
def navigation_page():
	return render_template('Navigation.html')

@app.route("/calendar")
def calendar_page():
	return render_template('calendar.html')
#
# @app.route("/reservation", methods=['GET', 'POST'])
# def book_page():
# 	book_form = BookForm()
# 	if book_form.validate_on_submit():
# 		return render_template('calendar.html')
# 		# book_form.name =


@app.route("/login", methods=['GET', 'POST'])
def login():
	log_form = LoginForm()
	if log_form.validate_on_submit():
		attempted_user = users.query.filter_by(username=log_form.username.data).first()
		if attempted_user and attempted_user.check_password_correction(attempted_password=log_form.password.data):
			login_user(attempted_user)
			return redirect(url_for('navigation_page'))

		else:
			flash(f'Username and password do not match', category='danger')

	reg_form = RegisterForm()
	if reg_form.validate_on_submit():
		user_to_create = users(username=reg_form.username.data,
							   email=reg_form.email_address.data,
							   password=reg_form.password1.data)
		db.session.add(user_to_create)
		db.session.commit()
		login_user(user_to_create)
		flash(f'Successfully created', category='success')
		return redirect(url_for('navigation_page'))
	if reg_form.errors != {}:
		for err_msg in reg_form.errors.values():
			flash(f'There was an error: {err_msg}', category='danger')
	return render_template("signlog.html", reg_form=reg_form, log_form=log_form)


@app.route("/logout")
def logout_page():
	logout_user()
	flash("You have been logged out", category='info')
	return redirect(url_for("login"))