#import dos pacotes necessários
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
import smtplib

#criação de um objeto de mensagem
msg = MIMEMultipart()
texto = 'Entendendo o momento que estamos passando, peço que você visualize esta missão.'

#paramentros
senha = 'Sergios3s21'
msg['From'] = 'sergio@sinergia3s.com.br'
msg ['To'] = 'sergio@sinergia3s.com.br'
msg['Subject'] = 'Teste de envio'

#criação do corpo da mensagem
msg.attach(MIMEText(texto, 'plain'))

#criação do servidor
server = smtplib.SMTP('smtp.hostinger.com: 587')
server.starttls()

#login na conta para envio
server.login(msg['From'], senha)

#envio da mensagem
server.sendmail(msg['From'], msg['To'], msg.as_string())

#encerramento do servidor
server.quit()

print('Mensagem enviada com sucesso')
