import _ from 'lodash'
import React from 'react'

import PropTypes from 'prop-types'
import { connect } from 'react-redux'
import { Redirect } from 'react-router-dom'

const propTypes = {
  redirect: PropTypes.string.isRequired
}

const PageFront = ({ redirect }) => (!redirect ? null : <Redirect to={'/' + redirect} />)

PageFront.propTypes = propTypes

const mapStateToProps = ({ boards }) => {
  const firstBoard = _.sortBy(boards, 'title')[0] || {}
  return { redirect: firstBoard.slug || '' }
}

export default connect(mapStateToProps)(PageFront)
