import React from 'react'
import { Link } from 'react-router-dom';
import * as Icon from 'react-bootstrap-icons';


export const DetalleUsuario = ({ usuario, setLoading }) => {

    const onClickDelete = async (id) => {
        setLoading(true);
        const url= `http://localhost:8001/api/usuarios/${id}`;
        console.log(url);
        const res = await axios.delete(url)
        .then(response=> {return response.data })
        .catch(error=>{ return error; })
        if (res.success) {
          alert("ok");
        } else {
            alert("Error al borrar");
        }
        setLoading(false);
    }

    return (
        <tr>
            <td>{usuario.id}</td>
            <td>{usuario.nombre}</td>
            <td>{usuario.apellidos}</td>
            <td>{usuario.correo}</td>
            <td>{usuario.telefono}</td>
            <td>

              <Link to={`/usuarios/${usuario.id}`} className="btn btn-light"><Icon.PencilSquare /></Link>
              <a href="#" className="btn btn-danger" onClick={()=>onClickDelete(usuario.id)}> <Icon.Trash /> </a>
            </td>
        </tr>
    )
}
