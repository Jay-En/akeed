<?php 
	namespace Module\Controller;


	use Slim\Views\Twig;
	use Psr\Log\LoggerInterface;
	use Psr\Http\Message\ServerRequestInterface as Request;
	use Psr\Http\Message\ResponseInterface as Response;
	
	class HomeController{

		protected $c;

		public function __construct($c)
		{
			$this->c = $c;
		}


		public function home(Request $request, Response $response, $args)
		{
       		$this->c->logger->info("Home page action dispatched");
        
       	 	$this->c->view->render($response, 'home.twig');
        	return $response;
		}


	}