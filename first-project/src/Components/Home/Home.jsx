import React from 'react';
import './Home.css';
import { FaCaretDown } from "react-icons/fa";

function Home() {
  return (
    <div>
  <div className="menu_bar">
    <h1 className="logo">IAM <span>System..</span></h1>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Services <FaCaretDown className='icon'/></a>
        <div className="dropdown">
          <ul>
            <li><a href="#">View Attendance</a></li>
            <li><a href="#">Add Attendance</a></li>
            <li><a href="#" onclick="iam()">IAM System</a></li>
          </ul>
        </div>
      </li>
      <li><a href="#">Contact</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Log Out</a></li>
    </ul>
  </div>
</div>

  );
};

export default Home;