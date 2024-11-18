Esse trabalho tem a intenção de mostrar qaul foi a nota máxima que um aluno já tirou e também a quantidade de aulas que o aluno tem de uma determinada materia. 
Isso será feito através de formulários para adiscionar os dados e as tabelas onde apareceram tais dados. Materiais utilizados foram o Xampp control panel, Visual studio code, além do BR modelo para a criação dos modelo conceitual e lógico baseados no tema.
No Xampp foi criado no PhpMyAdmin, um banco de dados chamado "horario", onde nesse bando foi criado as seguintes tabelas( 'alunos' e 'materia'. 
Na tabela 'alunos', contem o id do aluno, o nome, a matricula e a nota máxima. Na tabela 'materia', contem o id da materia, o nome da materia e a quantidade de aulas dessa materia. 
primerio tivi que conectar a tabela com o banco de dados "connection.php", ele foi incluido em todos os outros arquivos menos no index.php, nele contem as variaveis ($) server, user, password, dbname e connectionBD. Um IF(){} foi utilizado para mostra se houve algum erra na hora de conectar com o banco.
Além disso, foi feito um CRUD(create, read, update e delete) na linguagem PHP. Um arquivo "index.php" foi feito para determinar qual formulári de qual tabela seria mostrado primeiro, nesse caso, o formulário escolhido foi o da tabela 'alunos', mas também foi feito um para a tabela 'materia'( um read e list para cada tabela). 
No update e no delete, foi feito para atualixar e deletar algum dado das tabelas, atravél de um <a href> </a>, pois havera um botão ao lado para redirecionada atravél de uma header('location: list.php');
No delete, com a variavél $id sendo atribuida ao metodo $_GET para ser possivél pegar as informações do id_aluno e um IFisset para verificar se existe aquela informação usado a consulta mysqli_query(DELETE FROM alunos WHERE id_aluno). 
No save.php foi incluido uma conexão com o banco, as variavéis nome, matricula, e nota com a conseulta $sql = mysqli_query( $connectionBD, INSERT INTO alunos($) VALUES($)); 
Outras consultad que utlizei foi a $sql = SELECT FROM aluno , UPDATE FROM alunos, também utilizei o metodo $_POST para evciar ou criar os dados necessarios. O mesnos processo foi realizado para a tabela 'materia', tive que criar outro arquivo para cada um dos componentes do CRUD.











![modelo conceitual](https://github.com/user-attachments/assets/1eea7751-fcb7-4724-ad1b-63ceef1ad459)

![modelo lógico](https://github.com/user-attachments/assets/fff9974d-0528-48d1-9a7d-57029b96bb91)
