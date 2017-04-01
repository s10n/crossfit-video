import React from 'react'
import { Route, IndexRoute } from 'react-router'
import App from './containers/App'
import PageFront from './containers/PageFront'
import PageTrash from './containers/PageTrash'
import BoardRead from './containers/BoardRead'
import PageSignup from './containers/auth/PageSignup'

export default (
  <Route path="/" component={App}>
    <IndexRoute component={PageFront} />
    <Route path="trash" component={PageTrash} />
    <Route path="signup" component={PageSignup} />
    <Route path=":boardSlug" component={BoardRead} />
  </Route>
)
