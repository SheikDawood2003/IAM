import React, { useState } from 'react';
import './LoginRegister.css';
import { FaUser, FaLock, FaEnvelope  } from "react-icons/fa";

const LoginSignup = () => {
  const [isSignup, setIsSignup] = useState(false);

  const toggleForm = () => {
    setIsSignup(!isSignup);
  };

  return (
    <div>
      <section className={`container forms ${isSignup ? 'show-signup' : ''}`}>
        <div className="form login">
          <div className="form-content">
            <header>Login</header>
            <form action="">
              <div className="field input-field">
                <input type="text" placeholder="Username" className="input" />
                <FaUser className='icon' />
              </div>

              <div className="field input-field">
                <input type="password" placeholder="Password" className="password" />
                <FaLock className='icon'/>
              </div>

              <div className="form-link">
                <a href="#" className="forgot-pass">Forgot password?</a>
              </div>

              <div className="field button-field">
                <button type="submit">Login</button>
              </div>
            </form>

            <div className="form-link">
              <span>Don't have an account? <a href="#" onClick={toggleForm} className="link signup-link">Signup</a></span>
            </div>
          </div>
        </div>

        <div className="form signup">
          <div className="form-content">
            <header>Signup</header>
            <form action="#">
              <div className="field input-field">
                <input type="text" placeholder="Username" className="input" />
                <FaUser className='icon'/>
              </div>

              <div className="field input-field">
                <input type="email" placeholder="Email" className="input" />
                <FaEnvelope className='icon'/>
              </div>

              <div className="field input-field">
                <input type="password" placeholder="Create password" className="password" />
                <FaLock className='icon'/>
              </div>

              <div className="field input-field">
                <input type="password" placeholder="Confirm password" className="password" />
                <FaLock className='icon'/>
              </div>

              <div className="field button-field">
                <button type="submit">Signup</button>
              </div>
            </form>

            <div className="form-link">
              <span>Already have an account? <a href="#" onClick={toggleForm} className="link login-link">Login</a></span>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
};

export default LoginSignup;
