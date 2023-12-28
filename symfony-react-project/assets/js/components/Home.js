import React, { Component } from "react";
import { Link, Routes, Route, Navigate } from "react-router-dom";
import Users from "./Users";
import Posts from "./Posts";

class Home extends Component {
    render() {
        return (
            <div>
                <nav className="navbar navbar-expand-lg navbar-dark bg-dark">
                    <Link className={"navbar-brand"} to={"/"}> Symfony React Project </Link>
                    <div className="collapse navbar-collapse" id="navbarText">
                        <ul className="navbar-nav mr-auto">
                            <li className="nav-item">
                                <Link className={"nav-link"} to={"/posts"}>Posts</Link>
                            </li>
                            <li className="nav-item">
                                <Link className={"nav-link"} to={"/users"}>Users</Link>
                            </li>
                        </ul>
                    </div>
                </nav>
                <Routes>
                    <Route path="/" element={<Navigate to="/users" replace/>}/>
                    <Route path="/users" element={<Users/>} />
                    <Route path="/posts" element={<Posts/>} />
                </Routes>
            </div>
        );
    }
}

export default Home;