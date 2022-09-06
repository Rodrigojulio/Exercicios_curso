class ContaBancaria:
    num_contas = 0
    def __init__(self, clientes, numero, saldo):
        self.agencia = agencia
        self.numero = numero
        self.saldo = saldo
        ContaBancaria.num_contas += 1
    def _del_(self):
        ContaBancaria.num_contas -= 1
    def depositar(self, valor):
        self.saldo = self.valor + valor
    def sacar(self, valor):
        self.saldo = self.valor - valor
    def consultaSaldo(self):
        return self.saldo
