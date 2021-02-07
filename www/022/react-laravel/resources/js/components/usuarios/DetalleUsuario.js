import React from 'react'
import { Link } from 'react-router-dom';
import { toast } from 'react-toastify';
import * as Icon from 'react-bootstrap-icons';


export const DetalleUsuario = ({ usuario, setLoading }) => {

    const notifyOk = (texto) => toast.success(texto, {
        position: "top-left",
        autoClose: 5000,
        hideProgressBar: false,
        closeOnClick: true,
        pauseOnHover: true,
        draggable: true,
        progress: undefined,
      });
    
    const notifyError = (texto) => toast.error(texto, {
        position: "top-left",
        autoClose: 5000,
        hideProgressBar: false,
        closeOnClick: true,
        pauseOnHover: true,
        draggable: true,
        progress: undefined,
    });

    const onClickDelete = async (id) => {
        setLoading(true);
        const url= `http://localhost:8001/api/usuarios/${id}`;
        const res = await axios.delete(url)
        .then(response=> {return response.data })
        .catch(error=>{ return error; })
        if (res.success) {
            notifyOk(res.message);
        } else {
            notifyError(res.message);
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
