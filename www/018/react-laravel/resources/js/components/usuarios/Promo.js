import React from 'react'

export const Promo = () => {
    return (
        <>     
        <hr className="featurette-divider"/>
        <div className="row featurette">
          <div className="col-md-7">
            <h2 className="featurette-heading">Curso de PHP 8 y MySQL 8. <span className="text-muted">Uno de los lenguajes más utilizados en Internet y la base de datos más popular.</span></h2>
            <p className="lead">¡Con un capítulo introductorio a Laravel 8! Eleva tus conocimientos de PHP a la máxima potencia con este framework.</p>
          </div>
          <div className="col-md-5">
            <img src="images/libro.png" width="500px"/>
          </div>
        </div>
        </>
    )
}
