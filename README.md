# SistemaImobiliariaPHP
- Sistema para movimentar uma imobiliária.  - Usar OOP - Classes: imóvel, casa, apartamento (Usar herança)

PRIMEIRO TRABALHO PARA COMPOR A NOTA DA PROVA: Professor : Semirames P Flores Disciplina : Técnica de Programação I – 2 Semestre - Sexta Curso : DSM Grupos : de 3 até 5 alunos Entrega : 24/03/23

A) Introdução Você deve fazer um sistema para gerenciar uma imobiliária, utilizando POO. O sistema deve ter um programa principal com um menu, onde os usuários têm acesso as opções para gerenciamento da imobiliária:

Menu:
O sistema deverá ter um menu com as seguintes opções: 1 - Cadastrar casa ( Permite cadastrar uma casa ) : o usuário deve informar o número de quartos, valor, endereço e se a casa possui quintal. 2 - Cadastrar apartamento (permite cadastrar um apartamento) :
o usuário deve informar o número de quartos, valor e o valor do condomínio do apartamento 3 - Listar casas (esta opção exibe todas as casas cadastradas ) O sistema deve exibir todas as casas cadastradas,
se não houver nenhuma casa cadastrada o sistema deve avisar o usuário

B) Descrição das Classes : O construtor das classes deve permitir inicializar seus atributos com o
valores de seus argumentos
Imovel
( Possui 03 atributos ) a) quartos (número de quartos do imóvel) b) valor (valor do imóvel) c) endereco (endereço do imóvel)
Imovel (método obrigatório ) d) dadosImovel() (exibe uma string com os atributos de um imóvel)

Casa ( Possui um atributo - Esta classe é uma especialização da classe imóvel) a) quintal ( boleano que informa se a casa tem quintal ) Casa (método obrigatório ) b) dadosCasa() (exibe uma string com os atributos de uma casa)

Apartamento (Possui um atributo - Esta classe é uma especialização da classe imóvel) a) condominio (representa o valor do condomínio de um apartamento ) Apartamento (método obrigatório ) b) dadosApartamento() (exibe uma string com os atributos de uma
apartamento) ENTREGA DO TRABALHO :

Todos os arquivos fonte devem possuir no cabeçalho a identificação dos autores.
Não será aceito entrega do trabalho fora da data limite
Trabalhos que não possam ser executados receberão nota zero
O seu programa precisa estar identado para ressaltar as estruturas do programa.
Você deverá enviar os fontes da tarefa e manter uma cópia pelo menos até o final do semestre.
*** No dia da apresentação deverá ser entregue a capa do trabalho impressa com nome de todos os participantes do grupo. *** O aluno que faltar na apresentação receberá metade da nota do grupo *** O grupo poderá trocar o tema do trabalho, de imobiliária para o tema do projeto do grupo, desde que tenha uma estrutura de classes com herança, conforme o pedido no trabalho.
