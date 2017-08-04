export const youtubeAPIKey = process.env.REACT_APP_ENV !== 'production' ? '' : ''

export const firebaseConfig = process.env.REACT_APP_ENV !== 'production' ? {} : {}

export const appConfig =
  process.env.REACT_APP_ENV !== 'production' ? { signupAllowed: true } : { signupAllowed: false }
