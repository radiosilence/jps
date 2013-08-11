from flask import Flask, request, g, redirect, url_for, \
     abort, render_template, flash


DEBUG = False

app = Flask(__name__)
app.config.from_object(__name__)


@app.route('/')
def home():
    return render_template('home.html',
        page='home')


@app.route('/contact')
def contact():
    return render_template('contact.html',
        title='Contact',
        page='contact')


@app.route('/services')
def services():
    return render_template('services.html',
        title='Services',
        page='service')


if __name__ == '__main__':
    app.run()