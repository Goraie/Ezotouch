import './DayCard.scss'

export default (props) => {
  const { className, title, children, img, origin = false } = props

  return (
    <div className="day-card">
      <div className="day-card__back">
        <p>Обратная сторона</p>
      </div>
      <div className="day-card__front">
        <p>Рубашка</p>
      </div>
    </div>
  )
}
