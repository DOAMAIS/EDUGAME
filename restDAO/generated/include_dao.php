<?php
	//include all DAO files
	require_once('class/sql/Connection.class.php');
	require_once('class/sql/ConnectionFactory.class.php');
	require_once('class/sql/ConnectionProperty.class.php');
	require_once('class/sql/QueryExecutor.class.php');
	require_once('class/sql/Transaction.class.php');
	require_once('class/sql/SqlQuery.class.php');
	require_once('class/core/ArrayList.class.php');
	require_once('class/dao/DAOFactory.class.php');
 	
	require_once('class/dao/AlunoDAO.class.php');
	require_once('class/dto/Aluno.class.php');
	require_once('class/mysql/AlunoMySqlDAO.class.php');
	require_once('class/mysql/ext/AlunoMySqlExtDAO.class.php');
	require_once('class/dao/AlunoDisciplinaDAO.class.php');
	require_once('class/dto/AlunoDisciplina.class.php');
	require_once('class/mysql/AlunoDisciplinaMySqlDAO.class.php');
	require_once('class/mysql/ext/AlunoDisciplinaMySqlExtDAO.class.php');
	require_once('class/dao/DisciplinaDAO.class.php');
	require_once('class/dto/Disciplina.class.php');
	require_once('class/mysql/DisciplinaMySqlDAO.class.php');
	require_once('class/mysql/ext/DisciplinaMySqlExtDAO.class.php');
		require_once('class/dao/RankingDAO.class.php');
	require_once('class/dto/Ranking.class.php');
	require_once('class/mysql/RankingMySqlDAO.class.php');
	require_once('class/mysql/ext/RankingMySqlExtDAO.class.php');
	require_once('class/dao/NotificacaoDAO.class.php');
	require_once('class/dto/Notificacao.class.php');
    	require_once('class/mysql/NotificacaoMySqlDAO.class.php');
	require_once('class/mysql/ext/NotificacaoMySqlExtDAO.class.php');
        require_once('class/dao/FeedbackDAO.class.php');
	require_once('class/dto/Feedback.class.php');
        require_once('class/mysql/FeedbackMySqlDAO.class.php');
	require_once('class/mysql/ext/FeedbackMySqlExtDAO.class.php');
	require_once('class/dao/NotificacaoAlunoDAO.class.php');
	require_once('class/dto/NotificacaoAluno.class.php');
	require_once('class/mysql/NotificacaoAlunoMySqlDAO.class.php');
	require_once('class/mysql/ext/NotificacaoAlunoMySqlExtDAO.class.php');
	require_once('class/dao/TiponotificacaoDAO.class.php');
	require_once('class/dto/Tiponotificacao.class.php');
	require_once('class/mysql/TiponotificacaoMySqlDAO.class.php');
	require_once('class/mysql/ext/TiponotificacaoMySqlExtDAO.class.php');
	require_once('class/dao/TipousuarioDAO.class.php');
	require_once('class/dto/Tipousuario.class.php');
	require_once('class/mysql/TipousuarioMySqlDAO.class.php');
	require_once('class/mysql/ext/TipousuarioMySqlExtDAO.class.php');
	require_once('class/dao/TurmaDAO.class.php');
	require_once('class/dto/Turma.class.php');
	require_once('class/mysql/TurmaMySqlDAO.class.php');
	require_once('class/mysql/ext/TurmaMySqlExtDAO.class.php');
	require_once('class/dao/TurmaDisciplinaDAO.class.php');
	require_once('class/dto/TurmaDisciplina.class.php');
	require_once('class/mysql/TurmaDisciplinaMySqlDAO.class.php');
	require_once('class/mysql/ext/TurmaDisciplinaMySqlExtDAO.class.php');
	require_once('class/dao/UsuarioDAO.class.php');
	require_once('class/dto/Usuario.class.php');
	require_once('class/mysql/UsuarioMySqlDAO.class.php');
	require_once('class/mysql/ext/UsuarioMySqlExtDAO.class.php');
	require_once('class/dao/UsuarioDisciplinaDAO.class.php');
	require_once('class/dto/UsuarioDisciplina.class.php');
	require_once('class/mysql/UsuarioDisciplinaMySqlDAO.class.php');
	require_once('class/mysql/ext/UsuarioDisciplinaMySqlExtDAO.class.php');

?>