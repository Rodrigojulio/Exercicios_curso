'''
from tkinter import *

janelaPrincipal = Tk()
janelaPrincipal.mainloop()
'''
'''
from tkinter import *

janelaPrincipal = Tk()
texto = Label(master = janelaPrincipal, text = 'Minha janela exibida')
texto.place(x = 50, y = 100)
janelaPrincipal,mainloop()
'''

from tkinter import *

def funcClicar():
    print('Botão pressionado')

janelaPrincipal = Tk()
texto = Label(master = janelaPrincipal, text = 'Minha janela exibida')
texto.pack()

pic = PhotoImage(file = 'estacio.gif')
logo = Label(master = janelaPrincipal, image = pic)
logo.pack()

botao = Button(master = janelaPrincipal, text = 'Clique', command= funcClicar)
botao.pack()

janelaPrincipal.mainloop()

