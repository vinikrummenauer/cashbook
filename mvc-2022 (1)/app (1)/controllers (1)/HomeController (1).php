<?php
/**
 * home - Controller de exemplo
 * @author Cândido Farias
 * @package mvc
 * @since 0.1
 */
class HomeController extends MainController
{

	public function __construct(){
		parent::__construct();
		if(!isset($_SESSION['user'])){
			header("Location:".URL_BASE."users/login");
		}
	}

	/**
	 * Carrega a página "/views/home/index.php"
	 */
    public function index() {
		# Título da página

		$this->title = 'Home';

		$this->list();
		
		
	
		
    } // index

	public function list(){
		$model=$this->load_model("Home");
		$listMoviments=$model->list();
		$listDate=$model->date();
		$listInput=$model->input();
		$listOutput=$model->output();
		$listtInput=$model->tinput();
		$listtOutput=$model->toutput();
		$data['moviments']=$listMoviments;
		$data['date']=$listDate;
		$data['input']=$listInput;
		$data['output']=$listOutput;
		$data['tinput']=$listtInput;
		$data['toutput']=$listtOutput;

		# Carrega os arquivos do view	pasta/arquivo	
		$this->view->show('home/home', $data);
	}

	
} // class HomeController