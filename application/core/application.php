<?php

class Application
{
    /** @var string The controller name from URL */
    private string $url_controller_name = '';

    /** @var object|null The controller object */
    private ?object $url_controller = null;

    /** @var string The method (action) */
    private string $url_action = '';

    /** @var array URL parameters */
    private array $url_params = [];

    public function __construct()
    {
        $this->splitUrl();

        // no controller given? load default home page
        if ($this->url_controller_name === '') {

            require APP . 'controller/home.php';
            $this->url_controller = new Home();
            $this->url_controller->index();

        } elseif (file_exists(APP . 'controller/' . $this->url_controller_name . '.php')) {

            require APP . 'controller/' . $this->url_controller_name . '.php';
            $this->url_controller = new $this->url_controller_name();

            if ($this->url_action !== '' && method_exists($this->url_controller, $this->url_action)) {

                if (!empty($this->url_params)) {
                    call_user_func_array([$this->url_controller, $this->url_action], $this->url_params);
                } else {
                    $this->url_controller->{$this->url_action}();
                }

            } else {
                // no action → call index()
                if ($this->url_action === '') {
                    $this->url_controller->index();
                } else {
                    header('location: ' . URL . 'problem');
                    exit;
                }
            }
        } else {
            header('location: ' . URL . 'problem');
            exit;
        }
    }

    private function splitUrl(): void
    {
        if (isset($_GET['url'])) {

            $url = trim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            $this->url_controller_name = $url[0] ?? '';
            $this->url_action          = $url[1] ?? '';

            unset($url[0], $url[1]);
            $this->url_params = array_values($url);
        }
    }
}
