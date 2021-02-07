import React from 'react';
import { Link } from 'react-router-dom';

export const Cabecera = () => {
    return (
      <header>
      <nav className="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a className="navbar-brand" href="#">Curso de PHP 8 y MySQL 8</a>
        <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span className="navbar-toggler-icon"></span>
        </button>
        <div className="collapse navbar-collapse" id="navbarCollapse">
          <ul className="navbar-nav mr-auto">
            <li className="nav-item active">
                <Link to="/usuarios" className="nav-link">Home</Link>
            </li>
            <li className="nav-item">
            <Link to="/usuarios/list" className="nav-link">Usuarios</Link>
            </li>
            <li className="nav-item">
            <Link to="/usuarios/nuevo" className="nav-link">Nuevo</Link>
            </li>      
          </ul>
          <form className="form-inline mt-2 mt-md-0">
            <input className="form-control mr-sm-2" type="text" placeholder="Buscar..." aria-label="Search"/>
            <button className="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </div>
      </nav>
    </header>
    )
}
