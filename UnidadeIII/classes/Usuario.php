<?php
require_once('InterfaceDAO.php');

class Usuario implements InterfaceDao
{
    public function insert($parametros, $valores): bool
    {
        return true;
    }
    public function update($parametros, $valores): bool
    {
        return true;
    }
    public function  delete($clausula): bool
    {
        return true;
    }
    public function  selectAll(): array
    {
        return [];
    }
    public function  loadById($id): array
    {
        return [];
    }
}