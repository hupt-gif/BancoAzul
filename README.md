# 💳 Banco Azul – Sistema Bancário em PHP

Projeto de estudos feito em PHP para simular um sistema bancário básico via terminal.  
Foco em aprendizado de **PHP puro**, organização por arquivos, princípios de **código limpo** e manutenibilidade.

---

## 📚 Funcionalidades

- [x] Cadastro e login de múltiplos usuários
- [x] Verificação de saldo
- [x] Depósito
- [x] Saque
- [x] Menu interativo via terminal
- [x] Persistência dos dados em `usuarios.json`

---

## 🏗 Estrutura do Projeto

```bash
BancoPhP/
├── main.php              # Arquivo principal (loop do sistema)
├── usuarios.json         # Banco de dados simulado
└── src/
    ├── ui.php            # Interface do usuário (menus e inputs)
    ├── auth.php          # Autenticação e cadastro
    ├── banco.php         # Lógica da conta (saldo, extrato etc)
    └── operacoes.php     # Operações bancárias (saque, depósito)

🚀 Como executar
1. Clone este repositório:
git clone https://github.com/seu-usuario/banco-azul.git
cd banco-azul

2. Execute com PHP no terminal:
php main.php
Certifique-se de que o PHP esteja instalado e disponível no seu terminal.
Testado em PHP 8+ no Windows.

🧠 Conceitos aplicados
PHP procedural
Leitura e escrita com fgets() / STDIN
Manipulação de arrays e arquivos .json
Separação de responsabilidades
Boas práticas de código limpo

✍️ Sobre
Este projeto foi criado para fins didáticos.
Ajuda a consolidar conhecimentos de lógica, estruturação de código e uso básico de PHP sem frameworks.
Sinta-se à vontade para sugerir melhorias ou fazer um fork!
Arquivo 'usuarios.json' foi propositalmente deixado de fora do .gitignore para fins didáticos.

🧾 Licença
Este projeto é livre para fins de estudo.
Sem licença específica aplicada (público domínio / open source).
