import React, { useState, useEffect } from 'react';
import axios from 'axios';
import { Noticia } from './Noticia';
import { Spinner } from 'react-bootstrap';

export const Noticias = ({paginaFavoritaSeleccionada}) => {


    const parseFeed = "https://api.rss2json.com/v1/api.json?rss_url=";
    const feed = parseFeed + paginaFavoritaSeleccionada + "feed";
    const [noticias, setNoticias] = useState([]);
    const [isLoading, SetIsLoading] = useState(true);

    useEffect( () => {
        SetIsLoading(true);
        async function leerNoticias(){
          const res = await axios.get(feed)
          .then(response=> {return response.data.items })
          .catch(error=>{ return error; })
          setNoticias(res);
          SetIsLoading(false);
        }
          leerNoticias();
      },[paginaFavoritaSeleccionada]);

    return (
        <div>
            <h2>Noticias</h2>
            <h1>{ isLoading ? <Spinner animation="border" /> : "" }</h1>

            {
                noticias.map( (noticia, index) => (
                    <Noticia key={index} noticia={noticia} />
                ))
            }

        </div>
    )
}
