Para a devida utilização do projeto é necessário que o usuário possua os seguintes programas instalados: 

Visual Studio Code 1.74 https://code.visualstudio.com/updates/v1_74
XAMPP 7.4.33 https://www.apachefriends.org/download.html

Esses programas serão suporte para abrir a aplicação e realizar a conexão com o banco de dados.
Após realizar a instalação com os padrões recomendados, o usuário deve abrir a pasta do projeto no próprio VsCode para ter acesso ao código. 

As versões das linguagens utilizadas são:
HTML5.2
CSS 4.15
PHP 7.4.33
Bootstrap v5.2 

O projeto terá a divisão de pastas em:
User - Todas as páginas que o usuário web  e o admnistrador possui acesso e realiza conexões
Adm - Todas as páginas que o usuário admnistrador possui acesso e realiza conexão 
Css - Pasta de estilização 
Img - Pasta de repositório de todas as imagens utilizadas no site inseridas pelo programador.

O projeto possui o arquivo .txt intitulado BANCO, que é a primeira inserção a ser feita no programa de banco de dados para realizar as conexões corretamente.

Portanto, o próximo passo é a criação do banco, a qual o usuário deve:

1 - Acessar o site http://localhost/phpmyadmin/
2 - Na página home do site, entrar na aba SQL que se localiza no meio superior da tela 
3 - Copiar todo o código inserido no projeto no arquivo banco.txt
4 - Colar o código no campo de inserção da aba SQL 
5 - Clicar em 'Continuar' no botão após o campo de inserção 

A base estará criada e já aparecerá na aba esquerda contendo outras bases de dados padrão do phpmyadmin.
Ela terá a criação automática de todas as páginas contendo conteúdo Lorem Ipsum e imagens vazias,
além da criação do usuário admnistrador padrão:
USER - adm
SENHA - 123

Após isso, a navegação já poderá acontecer normalmente e o usuário poderá inserir e comandar todas as funções disponíveis. 

O projeto em nível de usuário permite as seguintes funcionalidades:
Navegar por todas as páginas de função usuário,
Cadastrar Usuário,
Enviar perguntas.

Em nível de administrador é possível:
Gerenciar usuários cadastrados,
Modificar as páginas do site, inserir informações no site,
Gerenciar perguntas, responder perguntas.