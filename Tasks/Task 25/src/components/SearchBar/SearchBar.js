import React from 'react';
import './SearchBar.css';

var sortByOptions = {
    'Best Match': 'best_match',
      'Highest Rated': 'rating',
      'Most Reviewed': 'review_count'
};

class SearchBar extends React.Component {
    renderSortByOptions(){
        return Object.keys(sortByOptions).map(sortByOption => {
            let sortByOptionValue = sortByOptions[sortByOption];
            return (<li key={sortByOptionValue}>
            {sortByOption}
            </li>);
          });

    }
    render(){
        return(
            <div class="SearchBar">
  <div class="SearchBar-sort-options">
    <ul>
      {this.renderSortByOptions()}
    </ul>
  </div>
  <div class="SearchBar-fields">
    <input placeholder="Search Businesses" />
    <input placeholder="Where?" />
  </div>
  <div class="SearchBar-submit">
    <a>Let's Go</a>
  </div>
</div>

        );
    }
}

export default SearchBar;