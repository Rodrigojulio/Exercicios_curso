'''
Fazer uma uma calculadora de IMC.
'''

peso = eval(input('Informe seu peso: '))
altura = eval(input('Informe sua altura: '))

imc = peso / (altura**2)

print('O seu IMC {:.2f}'.format(imc))
