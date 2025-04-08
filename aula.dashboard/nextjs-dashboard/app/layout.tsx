import '@/app/ui/global.css';  // Importando os estilos globais
import { inter } from '@/app/ui/fonts';  // Importando a fonte personalizada 'inter'

export default function RootLayout({
  children,
}: {
  children: React.ReactNode;
}) {
  return (
    <html lang="en">
      {/* Aplica a fonte 'inter' ao body */}
      <body className={`${inter.className} antialiased`}>
        {children}
      </body>
    </html>
  );
}
