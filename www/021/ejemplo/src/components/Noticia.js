import React from 'react'

export const Noticia = ({ noticia }) => {

  const { title, thumbnail, description } = noticia;

  return (
    <div>
        <br/>
        <h4><div dangerouslySetInnerHTML={{__html: title}} /></h4>
        <img src={thumbnail} width={400} />
        <div dangerouslySetInnerHTML={{__html: description}} />
    </div>
  )
}