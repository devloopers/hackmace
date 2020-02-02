import React, { Component } from 'react';
import './App.css';
import Nav from './Nav';
//import Status from './Status';
import Favicon from 'react-favicon';

import './css/bootstrap.min.css';
import './css/font-awesome.min.css';
const HumanStandardToken = require('./contracts/HumanStandardToken.json')

class App extends Component {
  constructor(props) {
    super(props);
    this.status = 'notdeployed';
    this.state = {
      status : 'notdeployed',
      network: '',
      accounts: null,
      web3error: true,
      tokenName: '',
      tokenSymbol: '',
      tokenTotalSupply: 1,
      tokenDecimalPlaces: 10,
      tokenAddress: 0
    };
    this.onChange = this.onChange.bind(this);
    this.onSubmit = this.onSubmit.bind(this);
  }
  async componentDidMount() {
    if (this.props.web3 == null){
    	this.setState({ web3error: true });
    }
    document.title = "ERC20 Token Generator";
    this.props.web3.eth.getAccounts((error, accounts) => {
      if (error) {
        this.setState({ web3error: true });
      } else {

	if(accounts[0] != null) { 
            this.setState({ accounts: accounts });
	    this.setState({ web3error: false });
	}  
    }
    });
    var that = this;
    this.props.web3.eth.net.getId(function(error, netID) {
      if(error) {
        console.log(error);
      } else {
        let network
        if (netID === 1) network = 'Main'
        else if (netID === 4) network = 'Rinkeby'
        else if (netID === 3) network = 'Ropsten'
        else if (netID === 42) network = 'Kovan'
        else network = 'Custom'
        that.setState({
              network: network
        });
      }
    });
  }
  //async submitToken(e) {  }
  async onSubmit(e) {
    e.preventDefault();
    this.setState({ status: 'deploying' });
    // get our form data out of state
    const {tokenName, tokenSymbol, tokenTotalSupply, tokenDecimalPlaces} = this.state;

    let tokenContract = new this.props.web3.eth.Contract(HumanStandardToken.abi);
    const instance = await tokenContract
      .deploy({
        data: HumanStandardToken.bytecode,
        arguments: [tokenTotalSupply, tokenName, tokenDecimalPlaces,tokenSymbol]})
      .send({ from: this.state.accounts[0] });
    // Aqui shauria de gestionar si el contracte no s'instancia be
    this.setState({status: 'deployed'});
    this.setState({tokenAddress: instance.options.address});
    console.log(`Address: ${instance.options.address}`);

    // Set Contract Abi
    var contractAbi = [
      {
        "constant": false,
        "inputs": [
          {
            "internalType": "string",
            "name": "_greeting",
            "type": "string"
          }
        ],
        "name": "setGreeting",
        "outputs": [
          {
            "internalType": "bool",
            "name": "",
            "type": "bool"
          }
        ],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
      },
      {
        "constant": true,
        "inputs": [],
        "name": "greet",
        "outputs": [
          {
            "internalType": "string",
            "name": "",
            "type": "string"
          }
        ],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
      }
    ];

    // Set Contract Address
      var contractAddress = "0x2351306B5bfe6301A7443786848E9C938bD956Af"; // Add Your Contract address here!!!

      // Set the Contract
      var contract = new this.props.web3.eth.Contract(contractAbi, contractAddress);

      this.props.web3.eth.getAccounts().then(function(accounts) {
        // console.log(accounts);
        // web3.eth.getAccounts().then(e => console.log(e));
         contract.methods.setGreeting(`${instance.options.address} - ${tokenName}`).send({ from: accounts[0] });
       });


  }
  onChange(e) {
    this.setState({ [e.target.name]: e.target.value });
  }
  render() {
    const {tokenName, tokenSymbol, tokenTotalSupply, tokenDecimalPlaces} = this.state;

      return (
        <div>
          <Favicon url="https://seeklogo.com/images/E/ethereum-logo-DE26DD608D-seeklogo.com.png" />
          <Nav accounts={this.state.accounts}/>
          <h1 className="text-center">Token generator</h1>
          <div className="form-group container center_div col-md-4">
          <form onSubmit={this.onSubmit}>
           <label>Name of the Equipment: </label>
              <select   
                className="form-control"
                required
                name="tokenName"
               value={tokenName}
                onChange={this.onChange}
                >
                <option defaultValue value="tractor">Tractor</option>
                <option value="tiller">Tiller</option>
                <option  value="Grain cart">Grain cart</option>
              </select>

             <label>Token symbol Symbol</label>
              <input
                className="form-control"
                required
                type="text"
                name="tokenSymbol"
                value={tokenSymbol}
                onChange={this.onChange}
              />
              
              <label>Total Number of tokens needed:</label>
               <input
                 required
                 className="form-control"
                 type="number"
                 min="1"
                 step="1"
                 name="tokenTotalSupply"
                 value={tokenTotalSupply}
                 onChange={this.onChange}
               />
                <input
                hidden
                  className="form-control"
                  required
                  type="number"
                  min="0"
                  step="1"
                  name="tokenDecimalPlaces"
                  value={tokenDecimalPlaces}
                  onChange={this.onChange}
                />
                <br></br>
             <button type="submit" className='btn btn-primary center-block' disabled={this.state.web3error}>Submit</button>
           </form>
           <Status status={this.state.status} address={this.state.tokenAddress} refresh={this.state.web3error} />
           </div>
        </div>
      );
  }
}


function Status(props) {
	if(props.refresh) { 
	    return(<div class="alert alert-warning" role="alert">
		  Please give permissions to Metamask to connect and refresh the page.
		</div>)
	} else {
	    if (props.status === 'deployed') {
	      return (
		<div class="alert alert-success" role="alert">
		  <span> Contract deployed at</span>
		  <span>{props.address}</span>
		</div>
	      )
	    } else if(props.status === 'deploying') {
	      return (
		<div class="alert alert-info" role="alert">
		  Your contract is being deployed. Please wait
		</div>
	      )
	    } else {
	      return (<div></div>)
	    }
  }
}

export default App;


