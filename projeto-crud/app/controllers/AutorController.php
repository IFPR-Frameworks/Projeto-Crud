<?php

require __DIR__ . '/../dao/AutorDAO.php';

class AutorController {

    private $autorDAO;

    public function __construct() {
        $this->autorDAO = new AutorDAO();
    }

    public function index() {
        $autores = $this->autorDAO->findAll();
        include __DIR__ . '/../views/autor/index.php';
    }

    public function show($id) {
        $autor = $this->autorDAO->findById($id);
        include __DIR__ . '/../views/autor/show.php';
    }

    public function create() {
        include __DIR__ . '/../views/autor/create.php';
    }

    public function store($nome) {
        $autor = new Autor();
        $autor->setNome($nome);
        $this->autorDAO->create($autor);
        header("Location: /autores");
    }

    public function edit($id) {
        $autor = $this->autorDAO->findById($id);
        include __DIR__ . '/../views/autor/edit.php';
    }

    public function update($id, $nome) {
        $autor = new Autor();
        $autor->setId($id);
        $autor->setNome($nome);
        $this->autorDAO->update($autor);
        header("Location: /autores");
    }

    public function delete($id) {
        $this->autorDAO->delete($id);
        header("Location: /autores");
    }
}
?>
