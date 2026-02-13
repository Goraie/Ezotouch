import './Content.scss'

export default (props) => {
  const { bodyTexture, children } = props

  return <main className="content">{children}</main>
}
