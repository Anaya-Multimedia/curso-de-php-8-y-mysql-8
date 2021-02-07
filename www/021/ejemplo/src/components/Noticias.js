import React, { useState, useEffect } from 'react';
import axios from 'axios';
import { Noticia } from './Noticia';

export const Noticias = ({paginaFavoritaSeleccionada}) => {


    const parseFeed = "https://api.rss2json.com/v1/api.json?rss_url=";
    const feed = parseFeed + paginaFavoritaSeleccionada + "feed";
    const [noticias, setNoticias] = useState([]);

    useEffect( () => {
        async function leerNoticias(){
          const res = await axios.get(feed)
          .then(response=> {return response.data.items })
          .catch(error=>{ return error; })
          setNoticias(res);
        }
          leerNoticias();
      },[paginaFavoritaSeleccionada]);

    return (
        <div>
            <h2>Noticias</h2>
            {
                noticias.map( (noticia, index) => (
                    <Noticia key={index} noticia={noticia} />
                ))
            }

        </div>
    )
}
