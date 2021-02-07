import React from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter as Router, Switch, Route } from "react-router-dom";
import { ToastContainer } from 'react-toastify';
import { Cabecera } from './Cabecera';
import { Home } from './Home';
import { Pie } from './Pie';
import { List } from './usuarios/List';
import { Nuevo } from './usuarios/Nuevo';
import { Edit } from './usuarios/Edit';

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

ReactDOM.render(<Main />, document.getElementById('main-usuarios'));