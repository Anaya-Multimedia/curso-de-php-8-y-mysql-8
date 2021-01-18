import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import {Cabecera} from "./Cabecera";
import { Pie } from './Pie';
import List from "./usuarios/List";
import Nuevo from "./usuarios/Nuevo";
import Edit from "./usuarios/Edit";
import { Home } from './usuarios/Home';

import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';

import {
  BrowserRouter as Router,
  Switch,
  Route
} from "react-router-dom";
  
function Main(){
  return (
    <Router>
      <ToastContainer />
      <Cabecera/>
      <main role="main">
     

        <Switch>
        <Route exact path="/usuarios/" exact component={Home} />
          <Route path="/usuarios/list" exact component={List} />
          <Route path="/usuarios/nuevo"  component={Nuevo} />
          <Route path="/usuarios/:id" component={Edit} />
        </Switch>
      </main>
      <Pie/>
    </Router>
  )
}

export default Main;
// for <div id="main-employee"></div>
ReactDOM.render(<Main />, document.getElementById('main-cursos'));

