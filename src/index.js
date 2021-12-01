import React from 'react';
import reactDOM from 'react-dom';

class Hello extends React.Component{
    render(){
        return(
            <h1>Hello world</h1>
        );
    }
}

reactDOM.render(<Hello />, document.getElementById('root'));