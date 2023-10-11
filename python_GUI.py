from PySimpleGUI import PySimpleGUI as sg

#layout
sg.theme('Reddit')
layout = [
    [sg.Text('Usuário'),sg.Input(key='usuario', size=(20,1))],
    [sg.Text('Senha'), sg.Input(key='senha', password_char='*', size=(20,1))],
    [sg.Checkbox('Salvar o login?')],
    [sg.Button('Entrar')]
]

#janela
janela = sg.Window('tela de login', layout)

#ler os eventos
while True:
    eventos, valores = janela.read()
    if eventos == sg.WINDOW_CLOSED:
        break
    if eventos == 'Entrar':
        if valores['usuario'] == 'gustavo'and valores['senha'] == '123':
            print("Bem-vindo")
        else:
            print("Usuario ou senha incorreta")