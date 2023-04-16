import React, { Component } from 'react'; import List
from './List';
import { DropdownButton, Dropdown } from 'react-bootstrap';

class FilteredList extends Component {
  constructor(props) {
    super(props);
    // The state is just a list of key/value pair (like a hashmap)
    this.state = {
    search: "",
    type: "all"
    };
  }
  // Sets the state whenever the user types on the search bar 
  onSearch = (event) => {
    this.setState({search: event.target.value.trim().toLowerCase()});
  }
    // Handles the selection of an item in the dropdown menu
  onTypeSelect = (eventKey) => {
    this.setState({ type: eventKey });
  }
  filterItem = (item) => {
  // Checks if the current search term is contained in this item
    return item.name.toLowerCase().search(this.state.search) !== -1 &&
    (this.state.type === "all" || item.type === this.state.type);
  }
  render() {
    return (
      <div className="filter-list">
        <h1>Produce Search</h1>
        <DropdownButton id = "typeDropdown" title={"Type"} onSelect={this.onTypeSelect}>
          <Dropdown.Item eventKey="all" onSelect>All</Dropdown.Item>
          <Dropdown.Item eventKey="Fruit">Fruit</Dropdown.Item>
          <Dropdown.Item eventKey="Vegetable">Vegetable</Dropdown.Item>
        </DropdownButton>
        <input type="text" placeholder="Search" onChange={this.onSearch} />
        {/* we are taking the items property (which is the list of
        produce), filtering the content to match the search word, then
        passing the filtered produce into the List component. */}

        <List items={this.props.items.filter(this.filterItem)} />
    </div>
    );
  }
}

export default FilteredList;