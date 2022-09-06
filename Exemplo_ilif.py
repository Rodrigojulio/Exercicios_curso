# AULA 03
#MODULO 01
'''
idade = eval(input('Informe a idade da criança: '))
if idade < 5:
    print('A criança deve ser vacinada contra a gripe.')
    print('Procure o posto de saúde mais próximo.')
elif idade == 5:
    print('A vacina estará disponível em breve.')
    print('Aguarde as próximas informações.')
else:
    print('A vacinação só ocorrerá daqui a 3 meses.')
    print('Informe-se novamente neste prazo.')
print('Cuide da saúde sempre. Até a próxima.')
'''
'''
for item in range(2 ,9 ,3):
    print(item)
'''
'''
nome = input('Entre com seu nome: ')
for letra in nome:
    print(letra)
'''
'''
nomes = ['Laura', 'Lis','Guilherme', 'Enzo', 'Arthur']
for nome in nomes:
    print(nome)
'''
'''
palavra = input('Entre com a palavra: ')
while palavra != 'sair':
    palavra = input('Digite sair para encerrar o laço: ')
print('Você digitou sair e agora está fora do laço')
'''
'''
numero = eval(input('Entre com um inteiro positivo: '))

if numero%2 == 0:
    print('O número informado é par')
else:
    print('O número informado e ímpar')
'''
'''
for numero in range(1,11,1): # nunca deixe de colocar o : quando terminar de informar uma copndição
    if numero % 2 == 0: # o mesmo acontece aqui, no inicio da condição sempre deve colocar o :
        print(f'{numero} é par')
    else:
        print(f'{numero} é ímpar')
'''
'''
soma_pares = 0
cont_pares = 0

for numero in range(1,11,1):
    if numero%2 == 0:
        soma_pares = soma_pares + numero
        cont_pares += 1
    else:
        continue
print(f'A soma acumulada foi {soma_pares} e a quantidade de pares foi {cont_pares}')
print(f'A media dos números pares foi {soma_pares/cont_pares}')
'''
'''
while True:
    print('Você está no primeiro laço.')
    opcao1 = input('Deseja sair dele? Digite SIM para isso.')
    if opcao1 == 'SIM':
        break # este break é do primeiro laço
    else:
        while True:
            print('Você está no segundo laço')
            opcao2 = input('Deseja sair dele? Digite SIM para isso.')
            if opcao2 == 'SIM':
                break # este break e doi segundo laço
            print('Você saiu do segudo laço.')
    print('Você saiu do primeiro laço.')
'''
'''
for num in range(1,11):
    if num == 5:
        continue
    else:
        print(num)
print('Laço encerrado.')
'''
'''
s = 0
for i in range(5):
    s += 3*i
print(s)
'''
'''
s = 0
a = 1
while s < 5:
    s = 3*a
    a += 1
    print(s)
'''
'''
for num in range(1, 11):
    if num % 2 == 0:
        pass
    else:
        print(num)
print('Laço encerrado')
'''
# modulo 2
'''
escolha = input('Escolha uma opção de função: 1 ou 2')
if escolha == 1:
    def func1 (x):
        return x + 1
else:
    def func2 (x):
        return x + 2
s = func1(10)
print(s)
'''
'''
def taximetro (distancia, multiplicador = 1 ):
    largada = 3
    km_rodado = 2
    valor = (largada + distancia * km_rodado) * multiplicador
    return valor

pagamento = taximetro(3.5)

print(pagamento)
'''
'''
def func1(x):
    x = 10
    print(f'Função func1 - x = {x}')

def func2(x):
    x = 20
    print(f'Função func2 - x ={x}')

x = 0
func1(x)
func2(x)
print(f'Programa principal - x = {x}')
'''
'''
def taximetro(distancia):
    def calculaMult():
        if distancia < 5:
            return 1.2
        else:
            return 1
    multiplicador = calculaMult()
    largada = 3
    km_rodado = 2
    valor = (largada + distancia * km_rodado) * multiplicador
    return valor

dist = eval(input('Entre com a distancia a ser percorrida em km: '))
pagamento = taximetro(dist)
print(f'O valor a pagar é R$ {pagamento}')
'''
'''
def regressiva(x):
    if x <= 0:
        print('Acabou')
    else:
        print(x)
        regressiva(x-1)
'''
# MODULO 3
'''
def taximetro(distancia, multiplicador=1):
    largada = 3
    km_rodado = 2
    valor = (largada + distancia * km_rodado) * multiplicador
    return valor


pagamento = taximetro (3.5)
print(pagamento)
'''
'''
def fatorial(n):
    fat = 1
    if n == 0 or n == 1:
        return fat
    else:
        for x in range(2, n + 1):
            fat = fat * x
            return fat
'''
'''
def fibo(n):
    'Determina o n-ésimo termo da sequêsncia de Fibonacci'
    if n == 1 or n == 2:
        return 1
    else:
        return fibo(n -1 ) + fibo(n -2)

print(help(fibo))
'''

'''
# função de raiz quadrada
def calculaDelta(coef1, coef2, coef3):
    #delta da eq. 2ª grau = b^2-4.a.c
    delta1 = coef2*coef2 - 4*coef1*coef3
    return delta1

a = eval(input('Entre comm o coeficinete da equação: '))
b = eval(input('Entre comm o coeficinete da equação: '))
c = eval(input('Entre comm o coeficinete da equação: '))

delta = calculaDelta(a, b, c)


print(f'O valor calculado do delta foi {delta}')

#delta > 0 : equação e, 2 raizes reais
#delta = 0 : equação tem 1 raiz real
#delta < 0 : equação não tem raiz real

if delta > 0:
    print('Aequação tem 2 raizes. ')
elif delta == 0:
    print('equação tem 1 raiz real. ')
else:
    print('equação não tem raiz real')
'''
'''
def func1(x):
    x = 10
    print(x)



x = 0
print(x)
func1(x)
print(x)
'''
'''
def rec(n):
    if n < 2:
        return rec(n -1)

print(rec(1))
'''
