<?php
interface InterfaceDao
{
    public function insert($parametros, $valores): bool;
    public function update($parametros, $valores): bool;
    public function  delete($clausula): bool;
    public function  selectAll(): array;
    public function  loadById($id): array;
}