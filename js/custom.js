//main class of website
class Main extends React.Component {

    render() {
        return (
            <div>
                <NavBar />
                <Calculate />
            </div>
        )
    }
}
//main navbar of website
class NavBar extends React.Component {

    render() {
        return (
            <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Card Game</a>
                </div>
            </nav>
        )
    }
}

//play box of website
class Calculate extends React.Component {

    state = { text: "" }

    //get the number of people from html input
    getNumOfPeople = (e) => {
        event.preventDefault();
        const numOfPeople = event.target.numOfPeople.value;

        //fetch data from server url
        fetch("./index.php/card/card_json?num=" + numOfPeople)
            .then(res => { return res.text() })
            .then(data => {this.setState({ text: data })});
    }

    render() {
        return (
            <main class="container">
                <div class="bg-light p-5 rounded">
                    <h2 class="mb-3">Let's Play</h2>
                    <form class="needs-validation" novalidate onSubmit={(e) => {
                        this.getNumOfPeople(e);
                    }}>
                        <div class="input-group mb-3">
                            <input type="number" max="53" min="2" class="form-control" placeholder="Number of people" aria-label="Recipient's username" aria-describedby="basic-addon2" required name="numOfPeople" />
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Play</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="bg-light pl-5 pb-5 rounded">
                    <h5 class="pb-3"> * Spade = S, Heart = H, Diamond = D, Club = C </h5>
                    <span dangerouslySetInnerHTML={{ __html: this.state.text }} />
                </div>

            </main>
        )
    }
}

ReactDOM.render(<Main />, document.getElementById('mydiv'));
