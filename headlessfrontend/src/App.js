/*
* Author : Saumya
*/
import logo from './logo.svg';
import './App.css';

import React from 'react';
import {BrowserRouter as Router,Route,Routes} from "react-router-dom";
import CustomRoutes from './CustomRoutes';

function App(props) {
  return (
    <div className="App">
      <Router>
        <Routes>
          {CustomRoutes.map((route,index)=>{
            return (
              <Route key={index} path={process.env.PUBLIC_URL+route.path} exact={route.exact || false}
              element={
                <route.layout {...props}>
                  <route.component {...props} />
                </route.layout>
              }
              >
              </Route>
            );
          })}
        </Routes>
      </Router>
    </div>
  );
}

export default App;
