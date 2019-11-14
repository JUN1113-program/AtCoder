s = gets.chomp.to_s
ans = 0
s.each_char.with_index(1) do |c, i|
  if i % 2 == 0 && c == "R"
    ans = "No"
  elsif i % 2 == 1 && c == "L"
    ans = "No"
  else
    ans = "Yes"
  end
  if ans == "No"
    break
  end
end
puts ans