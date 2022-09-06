from contas import Conta
from clientes import Clientes
cliente1 = Cliente(123,'Joao','Rua 1')
cliente2 = cliente(345,'Maria','Rua 2')
conta1 = Conta([cliente1 ,cliente2],1,2000)
conta1.gerasaldo()
conta1.depositar(1500)
conta1.sacar(500)
conta1.geralsaldo()
[]
class Clientes:
    def __init__(self,cpf ,nome ,endereco):
        self.cpf = cpf
        self.nome = nome
        self.endereco = endereco

class Contas:
    def __int__(self, clientes, numero, saldo):
        self.clientes = clientes
        self.numero = numero
        self.saldo = saldo
        self.data_abertura = datetime.datetime.today()
        self.extrato = Extrato()

    def depositar(self, valor):
        self.saldo += valor
        self.extrato.transacoes.append(['DEPOSITO' ,valor, 'Data', datetime.datetime.today()])

    def sacar(self, valor):
        if self.saldo < valor:
            return False
        else:
            self.saldo -= valor
            self.extrato.transacoes.append(['SAQUE', valor, 'Data', datetime.datetime.today()])
            return True

    def transfereValor(self, contadestino, valor):
        if self.saldo < valor:
            return 'Não Existe Saldo Suficiente'
        else:
            contadestino.depositar(valor)
            self.saldo -= valor
            return 'Transferencia Realizada'
class Extrato:
    def __init__(self):
        self.transacoes = []
    def extrato(self, numeroconta):
        print(f'Extrato : {numeroconta} \n')
        for p in self.trasacoes:
            print(f"{p[0]:15s} {p[1]: 10,2f} {p[3].strftime( '%d/%b/%y')}")

    #execução_no_terminal:
    from clientes import Cliente
    from ContasClientesExtrato import Conta
    cliente1 = Cliente('123','Joao','Rua X')
    cliente2 = Cliente('456', 'Maria', 'Rua W')
    conta1 = conta([cliente1,cliente2],1,2000)
    conta1.depositar(1000)
    conta1.sacar(1500)
    conta1.extrato.extrato(conta1.numero)
class Circulo:

    _total_circulos = 0 #tudo que estiver entre a class e o init sera atribuito da classe

    def __init__(self, pontox, pontoy, raio):
        self.pontox = pontox
        self.pontoy = pontoy
        self.raio = raio
        type(self)._total_circulos += 1
    @classmethod
    def get_total_circulo(cls):
        return cls._total_circulos

#metodo Estatico -> ele não precisa da instaciação do objeto da classe pra chamar a instanciação.