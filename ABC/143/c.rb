N = gets.to_i
S = gets.to_s.chomp.split("")
before = ""
delete = 0

S.each.with_index do |s, i|
  if s == before
    delete += 1
  end
  before = s
end

puts N - delete